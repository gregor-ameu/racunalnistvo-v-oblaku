// Placeholder for button functionality
document.addEventListener("DOMContentLoaded", () => {
  const createTableButton = document.getElementById("createTable");
  const tableNameInput = document.getElementById("tableName");
  const addTableDataButton = document.getElementById("addTableData");
  const checkUpdatesButton = document.getElementById("checkUpdates");
  const tableList = document.getElementById("tableList");
  const selectedTableDropdown = document.getElementById("selectedTable");
  const numberInput = document.getElementById("numberInput");
  const nameInput = document.getElementById("nameInput");
  const tableBody = document.querySelector(".table-section tbody");

  // Disable buttons initially
  createTableButton.disabled = true;
  addTableDataButton.disabled = true;
  checkUpdatesButton.disabled = true;

  // Call updateTableLists on page load
  updateTableLists();

  // Add dummy data to the table
  const addDummyDataToTable = () => {
    const dummyData = [
      { id: 1, date: "2025-04-01", number: 10, city: "New York" },
      { id: 2, date: "2025-04-02", number: 20, city: "Los Angeles" },
      { id: 3, date: "2025-04-03", number: 30, city: "Chicago" },
    ];

    dummyData.forEach((data) => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${data.id}</td>
        <td>${data.date}</td>
        <td>${data.number}</td>
        <td>${data.city}</td>
      `;
      tableBody.appendChild(row);
    });
  };

  // Call the function to populate the table with dummy data
  addDummyDataToTable();

  // Enable or disable the "Create Table" button based on input field value
  tableNameInput.addEventListener("input", () => {
    createTableButton.disabled = tableNameInput.value.trim() === "";
  });

  // Clear the input field when it is clicked (focused)
  tableNameInput.addEventListener("focus", () => {
    tableNameInput.value = "";
    createTableButton.disabled = true;
  });

  // Prevent negative values in the number input field
  numberInput.addEventListener("input", () => {
    if (parseFloat(numberInput.value) < 1) {
      numberInput.value = ""; // Clear the field if a negative value is entered
    }
    validateAddDataButton(); // Revalidate the "Add Data" button
  });

  // Enable or disable the "Add Data" button based on validation
  const validateAddDataButton = () => {
    const isDatabaseSelected = tableList.value !== "";
    const isNumberInputValid = numberInput.value.trim() !== "";
    const isNameInputValid = nameInput.value.trim() !== "";
    addTableDataButton.disabled = !(
      isDatabaseSelected &&
      isNumberInputValid &&
      isNameInputValid
    );
  };

  // Enable or disable the "Check for Updates" button based on dropdown selection
  const validateCheckUpdatesButton = () => {
    checkUpdatesButton.disabled = selectedTableDropdown.value === "";
  };

  // Add event listeners for validation
  tableList.addEventListener("change", validateAddDataButton);
  nameInput.addEventListener("input", validateAddDataButton);
  selectedTableDropdown.addEventListener("change", validateCheckUpdatesButton);

  // Add event listener for "Check for Updates" button
  checkUpdatesButton.addEventListener("click", () => {
    const selectedTable = selectedTableDropdown.value;
    if (selectedTable) {
      getTableData(selectedTable); // Trigger the getTableData function
    } else {
      alert("Please select a table to check for updates.");
    }
  });

  // Add event listener for "Select a Table" dropdown
  selectedTableDropdown.addEventListener("change", () => {
    const selectedTable = selectedTableDropdown.value;
    if (selectedTable) {
      getTableData(selectedTable); // Call the function to fetch and display table data
    }
  });

  // Add event listeners for button functionality
  createTableButton.addEventListener("click", () => {
    createNewTable(tableNameInput, createTableButton);
    updateTableLists(); // Refresh the table list after creating a new table
  });

  addTableDataButton.addEventListener("click", () => {
    addToDB(numberInput, nameInput, tableList);
    updateSelectedTable(tableList, selectedTableDropdown); // Update the table data after adding new data
    // Clear the input fields after the button is clicked
    numberInput.value = "";
    nameInput.value = "";
    // Revalidate the "Add Data" button
    validateAddDataButton();
  });
});

// Function to create a new table
function createNewTable(tableNameInput, button) {
  const tableName = tableNameInput.value.trim();

  // Validate table name
  if (!tableName) {
    alert("Please enter a valid table name.");
    return;
  }

  // Send request to the server to create a new table
  fetch("createTable.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `tableName=${encodeURIComponent(tableName)}`,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(data); // Display server response
      alert(data); // Show success or error message
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("An error occurred while creating the table.");
    });

  // Clear the input field after the request
  tableNameInput.value = "";
  button.disabled = true;
}

// Function to add data to the database
function addToDB(numberInput, nameInput, tableList) {
  // Get the selected database and input values
  const numberInputValue = numberInput.value.trim();
  const nameInputValue = nameInput.value.trim();
  const selectedTable = tableList.value;

  // Validate inputs before sending the request
  if (!selectedTable || !numberInputValue || !nameInputValue) {
    alert("Please fill in all fields and select a table.");
    return;
  }

  // Send data to the server using fetch
  fetch("addToTable.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `TableName=${encodeURIComponent(
      selectedTable
    )}&numberInput=${encodeURIComponent(
      numberInputValue
    )}&nameInput=${encodeURIComponent(nameInputValue)}`,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(data); // Display server response
      alert(data); // Show success or error message
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("An error occurred while adding data to the database.");
    });

  // Clear the input fields after the request
  numberInput.value = "";
  nameInput.value = "";
}

// Function to fetch and display table data
function getTableData(tableValue) {
  fetch("selectTable.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `tableName=${encodeURIComponent(tableValue)}`,
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data); // Display server response in the console

      // Clear the existing table body
      const tableBody = document.querySelector(".table-section tbody");
      tableBody.innerHTML = "";

      // Check if data contains rows or a message
      if (Array.isArray(data)) {
        // Populate the table with data
        data.forEach((row) => {
          const tableRow = document.createElement("tr");
          tableRow.innerHTML = `
            <td>${row.id}</td>
            <td>${row.numberInput}</td>
            <td>${row.nameInput}</td>
            <td>${row.created_at}</td>
          `;
          tableBody.appendChild(tableRow);
        });
      } else if (data.message) {
        alert(data.message); // Show a message if the table is empty
      } else if (data.error) {
        alert(data.error); // Show an error message if something went wrong
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("An error occurred while fetching table data.");
    });
}

// Function to update dropdown lists with table names
function updateTableLists() {
  fetch("getTables.php", {
    method: "GET",
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((response) => response.json())
    .then((data) => {
      if (Array.isArray(data)) {
        // Clear existing options in both dropdowns
        const tableList = document.getElementById("tableList");
        const selectedTableDropdown = document.getElementById("selectedTable");
        tableList.innerHTML =
          '<option value="" disabled selected>Select Existing Table</option>';
        selectedTableDropdown.innerHTML =
          '<option value="" disabled selected>Select a Table</option>';

        // Populate dropdowns with table names
        data.forEach((tableName) => {
          const option = document.createElement("option");
          option.value = tableName;
          option.textContent = tableName;

          // Add to both dropdowns
          tableList.appendChild(option.cloneNode(true));
          selectedTableDropdown.appendChild(option);
        });
      } else if (data.message) {
        alert(data.message); // Show a message if no tables exist
      } else if (data.error) {
        alert(data.error); // Show an error message if something went wrong
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("An error occurred while fetching table names.");
    });
}

function updateSelectedTable(tableDataWasAddedTo, selectedTable) {
  if (tableDataWasAddedTo.value !== selectedTable.value) return;
  getTableData(tableDataWasAddedTo.value); // Call the function to fetch and display table ta
}
