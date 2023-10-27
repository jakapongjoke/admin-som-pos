function showInput(inputId) {
    var input = document.getElementById(inputId);
    input.hidden = !input.hidden;
}
var startDateInput = document.getElementById("startDateInput");
var endDateInput = document.getElementById("endDateInput");

startDateInput.addEventListener("change", function () {
    var startDate = startDateInput.value;
    endDateInput.min = startDate;
});

endDateInput.addEventListener("change", function () {
    var endDate = endDateInput.value;
    startDateInput.max = endDate;
});
document.addEventListener("DOMContentLoaded", function () {
    var tbody = document.querySelector("#memoTable tbody");
    var rows = tbody.querySelectorAll("tr");

    if (rows.length < 10) {
        tbody.classList.add("few-rows");
    }
});
