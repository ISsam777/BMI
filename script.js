function imc() {
  let name, height, wheight, imc;
  name = document.getElementById("name").value;
  height = document.getElementById("height").value;
  weight = document.getElementById("weight").value;
  bmi = weight / (height * height);
  document.getElementById("result").innerHTML =
    "your BMI is" + " " + bmi.toFixed(3) + " " + "kg/m^2";
  if (bmi <= 18.5) {
    document.getElementById("note").innerHTML = "underwheight";
    document.getElementById("note").style.color = "#e00000";
  }
  if (bmi > 18.5 && bmi <= 25) {
    document.getElementById("note").innerHTML = "normal";
    document.getElementById("note").style.color = "#00ff00";
  }
  if (bmi > 25 && bmi <= 30) {
    document.getElementById("note").innerHTML = "overwheight";
    document.getElementById("note").style.color = "#fff000";
  }
  if (bmi > 30) {
    document.getElementById("note").innerHTML = "obesity";
    document.getElementById("note").style.color = "#ff0000";
  }
}
