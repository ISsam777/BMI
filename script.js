const height = document.getElementById("height").value;
const weight = document.getElementById("weight").value;

if (height <= 0 || height >= 3 || weight <= 0 || weight >= 500) {
  document.getElementById("Btn").disabled = true;
}
