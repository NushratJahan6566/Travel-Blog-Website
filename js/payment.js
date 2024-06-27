document.querySelector("#payment-form").addEventListener("submit", (e) => {
  e.preventDefault();

  const paymentMethod = document.querySelector("#payment-method").value;
  const transactionId = document.querySelector("#transaction-id").value;

  fetch("/verify-transaction", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ paymentMethod, transactionId }),
  })
    .then((response) => response.json())
    .then((data) => {
      const confirmationMessage = document.querySelector(
        "#confirmation-message"
      );
      if (data.status === "success") {
        confirmationMessage.textContent =
          "Transaction ID submitted successfully. We will verify it shortly.";
      } else {
        confirmationMessage.textContent = `Error: ${data.message}`;
      }
    })
    .catch((error) => {
      console.error("Error submitting transaction ID:", error);
      document.querySelector("#confirmation-message").textContent =
        "An error occurred while submitting the transaction ID.";
    });
});
