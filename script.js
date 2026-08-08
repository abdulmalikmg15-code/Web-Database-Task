function toggleStatus(id, button) {

    fetch("toggle.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "id=" + id
    })

    .then(response => response.text())

    .then(status => {

        if (status === "0" || status === "1") {

            const row = button.closest("tr");
            const statusCell = row.querySelector(".status");

            statusCell.textContent = status;

        } else {

            alert("An error occurred while updating the status.");

        }

    })

    .catch(error => {

        console.error(error);

        alert("Unable to connect to the server.");

    });
}