// Select form elements
const form = document.querySelector(".input-container");
const usernameInput = document.getElementById("input-username");
const errorMsg = document.querySelector(".err-msg");

// Add event listener for form submission
form.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission

    // Reset error message and remove animation before validation
    errorMsg.textContent = ""; // Clear previous messages
    errorMsg.classList.remove("show"); // Remove animation before re-adding

    // Check if the username input is empty
    if (usernameInput.value.trim() === "") {
        errorMsg.textContent = "User Name cannot be empty";// Set error message
        errorMsg.style.color = "red";// Set error message color
        errorMsg.classList.add("show"); // Trigger animation
        return; // Stop execution
    }

    // Create FormData object to send username to the server
    const formData = new FormData();
    formData.append("username", usernameInput.value);

    // Send form data using fetch API to process username verification
    fetch("info.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())// Convert response to text
    .then(data => {
        errorMsg.textContent = data;// Display server response message
        errorMsg.style.color = data === "Verified" ? " rgb(93, 189, 93)" : "red";// Set color based on response
        errorMsg.classList.add("show"); // Apply animation
    })
    .catch(error => {
        console.error("Error:", error);// Log any errors to the console
        errorMsg.textContent = "An error occurred. Please try again.";// Display error message
        errorMsg.style.color = "red";//Set error message color
        errorMsg.classList.add("show");// Apply animation
    });
});
