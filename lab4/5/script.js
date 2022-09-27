let list_one = 0;
let list_two = 0;
let list_three = 0;
let one = () => {
    if (list_one == 0) {
        list_one++
        let order = document.getElementById("order")
        let li = document.createElement("li");
        let txt_li = document.createTextNode("ผัดกระเพราหมูสับ x1")
        li.appendChild(txt_li);
        li.classList.add("list-group-item");
        li.classList.add("l1");
        order.appendChild(li);
        console.log(list_one);
    }
    else {
        list_one++
        document.getElementsByClassName("l1")[0].innerHTML = `ผัดกระเพราหมูสับ x${list_one}`

        console.log(list_one);
    }
}

let two = () => {
    if (list_two == 0) {
        list_two++
        let order = document.getElementById("order")
        let li = document.createElement("li");
        let txt_li = document.createTextNode("สปาเก็ตตี้คาโบนาร่า x1")
        li.appendChild(txt_li);
        li.classList.add("list-group-item");
        li.classList.add("l2");
        order.appendChild(li);
        console.log(list_two);
    }
    else {
        list_two++
        document.getElementsByClassName("l2")[0].innerHTML = `สปาเก็ตตี้คาโบนาร่า x${list_two}`

        console.log(list_two);
    }
}

let three = () => {
    if (list_three == 0) {
        list_three++
        let order = document.getElementById("order")
        let li = document.createElement("li");
        let txt_li = document.createTextNode("ต้มยำกุ้ง x1")
        li.appendChild(txt_li);
        li.classList.add("list-group-item");
        li.classList.add("l3");
        order.appendChild(li);
        console.log(list_three);
    }
    else {
        list_three++
        document.getElementsByClassName("l3")[0].innerHTML = `ต้มยำกุ้ง x${list_three}`

        console.log(list_three);
    }
}