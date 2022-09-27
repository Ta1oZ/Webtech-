function checkForm()
{
    let card_num = document.forms.myForm.card.value;
    let head = document.forms.myForm.head.value;
    let fname = document.forms.myForm.fname.value;
    let lname = document.forms.myForm.lname.value;
    let address = document.forms.myForm.address.value;
    let dist = document.forms.myForm.district.value;
    let dist2 = document.forms.myForm.district2.value;
    let pro = document.forms.myForm.province.value;
    let zip = document.forms.myForm.zip.value;
    if (card_num.length < 13 || card_num.length > 13) {
        alert("ใส่หมายเลขบัตรประชาชนให้ครบถ้วน!");
        return false;
    }
    if (head == "000" ) {
        alert("โปรดเลือกคำนำหน้าชื่อของคุณ!");
        return false;
    }
    if (fname.length < 2 || fname.length >= 21 ) {
        alert("ใส่ชื่อให้ครบถ้วน!");
        return false;
    }
    if (lname.length < 2 || lname.length >= 31 ) {
        alert("ใส่นามสกุลให้ครบถ้วน!");
        return false;
    }
    if (address.length < 5) {
        alert("ใส่ที่อยู่ให้ครบถ้วน!");
        return false;
    }
    if (dist.length < 2) {
        alert("ใส่ตำบล / แขวง ให้ถูกต้อง!");
        return false;
    }
    if (dist2.length < 2) {
        alert("ใส่อำเภอ / เขต ให้ถูกต้อง!");
        return false;
    }
    if (pro == "" ) {
        alert("โปรดเลือกจังหวัดของคุณ!");
        return false;
    }
    if (zip.length < 5 || zip.length > 5) {
        alert("ใส่รหัสไปรษณีย์ให้ครบถ้วน!");
        return false;
    }
}