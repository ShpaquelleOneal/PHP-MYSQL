<!DOCTYPE html>
<html>
<head>
    <title>GymStone - Training History</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <!-- Header content here -->
    </header>

    <section class="history">
        <h2>Training History</h2>
        <a href="{{ route('history') }}"><button>Back</button></a>
        
        <form action="{{ route('add-training') }}" method="POST" id="addTrainingForm">
            @csrf
            <table class="training-table">
                <tr>
                    <th>Exercises</th>
                    <th>Duration (hours)</th>
                </tr>
                <tr>
                    <td style="display: none;">
                        <!-- Input field to display the next available training ID -->
                        <input type="text" name="training_id[]" value="{{ $trainingId }}" readonly>
                    </td>
                    <td>
                        <!-- Dropdown to select the exercise -->
                        <select name="exercise_id[]">
                            <option value=""></option> <!-- Blank option -->
                            @foreach($exercises as $exercise)
                                <option value="{{ $exercise->id }}">{{ $exercise->exer_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <!-- Input field to enter the duration -->
                        <input type="number" name="duration[]" step="0.01">
                    </td>
                    <td>
                        <button type="button" class="delete-row-btn" disabled>Delete</button>
                    </td>
                </tr>
            </table>
        
            <button type="button" id="addRowBtn">Add Row</button>
            <button type="submit">Add Training</button>
        </form>
        
        <script>
            // Add event listener to the "Add Row" button
            document.getElementById('addRowBtn').addEventListener('click', function() {
                var currentRow = document.querySelector('.training-table tr:last-child');
                var newRow = currentRow.cloneNode(true);
                currentRow.parentNode.insertBefore(newRow, currentRow.nextSibling);
                
                // Enable the delete button for all rows except the first row
                var deleteButtons = document.querySelectorAll('.delete-row-btn');
                for (var i = 0; i < deleteButtons.length; i++) {
                    deleteButtons[i].disabled = false;
                }
            });
            
            // Add event listener to the "Delete" button
            document.addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('delete-row-btn')) {
                    var row = e.target.parentNode.parentNode;
                    var rowCount = document.querySelectorAll('.training-table tr').length;
                    
                    // Prevent deleting the row if it is the first row
                    if (row.rowIndex !== 1) {
                        row.parentNode.removeChild(row);
                    }
                    
                    // Disable the delete button for the last row
                    if (rowCount === 2) {
                        var deleteButton = document.querySelector('.delete-row-btn');
                        deleteButton.disabled = true;
                    }
                }
            });
        </script>

    </section>
</body>
</html>