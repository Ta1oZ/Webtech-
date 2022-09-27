function calculate() {
    var num1 = document.getElementById("value1").value;
    var num2 = document.getElementById("value2").value;
    var result = parseInt(num1) + parseInt(num2);
    document.getElementById("result").innerText = "Result : " + result;

    let nine = document.createElement("li");
    nine.innerText = num1 + " + " + num2 + " = " + result;
    document.getElementsByClassName("container")[0].appendChild(nine);
}