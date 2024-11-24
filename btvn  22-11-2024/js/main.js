
// Bai 1. Chuyen doi do C sang do F 
function nhietdoCsangF(){     //Dinh nghia ham voi ten "nhietdoF", nhan phan tu dau vao la"C"
    
    let C = document.getElementById("nhapdoC").value;
         
    C=parseFloat(C);                //parseFloat dung de chuyen doi mot chuoi thanh mot so
    let F = (C * 9/5) + 32;       //Cong thuc de chuyen doi tu do C --> do F 
                                // F=(C * 9/5)+32
    document.getElementById("KQ").innerText = `${C} do C = ${F.toFixed(2)} do F`;
    
}
//Bai 2: Tao cac ham tinh dien tich
//Tinh dien tich HCN
function calculateRectangleArea(){
    let dai=parseFloat(document.getElementById("chieudai").value);
    let rong=parseFloat(document.getElementById("chieurong").value);

    let s=dai*rong;     //cong thuc dien tich HCN

    document.getElementById("KQHCN").innerText = `${s.toFixed(2) }`;
  
}
//Tinh dien tich TG
function calculateTriangleArea(){
    let day=parseFloat(document.getElementById("chieuday").value);
    let cao=parseFloat(document.getElementById("chieucao").value);

    
    let s = (day*cao)/2;       //cong thuc dien tich HTG

    document.getElementById("KQHTG").innerText = `${s.toFixed(2)}`;
}
//Tinh dien tich HV
function calculateSquareArea(){
    let canh=parseFloat(document.getElementById("chieudaicanh").value);

    let s = (canh*canh);     //cong thuc dien tich HV
    document.getElementById("KQHV").innerText = `${s.toFixed(2)}`;
}
