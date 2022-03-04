function Calculate() {

	// Extracting value in the amount
	// section in the variable
	const amount = document.querySelector("#amount").value;

	// Extracting value in the interest
	// rate section in the variable
	// const rate = document.querySelector("#rate").value;

	// Extracting value in the months
	// section in the variable
	const months = document.querySelector("#months").value;

	// Calculating interest per month
	const interest = (amount * (20 * 0.01)) * months;
	
	// Calculating total payment
	const total = ((amount / 1) + interest).toFixed(2);
    $(".click").click(function(){
        document.querySelector("#total")
		.innerHTML = "Total Amount: (₦) " + total;
      });
}
