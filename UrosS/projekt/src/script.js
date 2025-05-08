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
  });

  addTableDataButton.addEventListener("click", () => {
    addToDB(numberInput, nameInput, tableList, selectedTableDropdown);
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
  fetch("src/createTable.php", {
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
    .then(() => {
      // Update the table lists after creating a new table
      updateTableLists();
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
function addToDB(numberInput, nameInput, tableList, selectedTableDropdown) {
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
  fetch("src/addToTable.php", {
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
    .then(() => {
      updateSelectedTable(tableList, selectedTableDropdown); // Update the table data after adding new data
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
function getTableData(tableValue, update = false) {
  fetch("src/selectTable.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `tableName=${encodeURIComponent(tableValue)}`,
  })
    .then((response) => response.json())
    .then((data) => {
      const tableBody = document.querySelector(".table-section tbody");
      tableBody.innerHTML = "";
      if (update) this.updateOnS3(data, tableValue); // Call the function to update on S3
      // Populate the table with data
      if (Array.isArray(data)) {
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
        alert(data.message);
      } else if (data.error) {
        alert(data.error);
      }
    })
    .catch((error) => {
      console.error("Error fetching table data:", error);
    });
}

// Function to update dropdown lists with table names
function updateTableLists() {
  fetch("src/getTables.php")
    .then((response) => response.json())
    .then((data) => {
      const tableList = document.getElementById("tableList");
      const selectedTableDropdown = document.getElementById("selectedTable");

      // Clear existing options
      tableList.innerHTML =
        '<option value="" disabled selected>Select Existing Table</option>';
      selectedTableDropdown.innerHTML =
        '<option value="" disabled selected>Select a Table</option>';

      // Populate dropdowns
      if (Array.isArray(data)) {
        data.forEach((tableName) => {
          const option = document.createElement("option");
          option.value = tableName;
          option.textContent = tableName;

          tableList.appendChild(option.cloneNode(true));
          selectedTableDropdown.appendChild(option);
        });
      } else if (data.message) {
        alert(data.message);
      } else if (data.error) {
        alert(data.error);
      }
    })
    .catch((error) => {
      console.error("Error fetching tables:", error);
    });
}

function updateSelectedTable(tableDataWasAddedTo, selectedTable) {
  // Update the selected table to the one where data was added
  selectedTable.value = tableDataWasAddedTo.value;
  // Fetch and display the data for the updated selected table
  getTableData(tableDataWasAddedTo.value, true);
}

async function updateOnS3(data, tableName) {
  // Convert the data to a JSON Blob
  const blob = new Blob([JSON.stringify(data)], { type: "application/json" });

  // Initialize the AWS SDK
  AWS.config.update({
    region: s3Data.region,
    accessKeyId: s3Data.accessKeyId,
    secretAccessKey: s3Data.secretAccessKey,
  });

  const s3 = new AWS.S3();

  // Prepare the upload parameters
  const params = {
    Bucket: s3Data.bucketName,
    Key: `${tableName}.json`, // File name in S3
    Body: blob,
    ContentType: "application/json",
  };

  try {
    // Upload the file to S3
    const result = await s3.upload(params).promise();
    console.log("File uploaded successfully:", result.Location);
    alert(`File uploaded successfully to S3: ${result.Location}`);
  } catch (error) {
    console.error("Error uploading file to S3:", error);
    alert("An error occurred while uploading the file to S3.");
  }
}

const s3Data = {
  bucketName: "alma-uros-projekt",
  region: "eu-central-1",
  accessKeyId: "AKIA6GSNHDBZKMPWADYK",
  secretAccessKey: "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",
};
