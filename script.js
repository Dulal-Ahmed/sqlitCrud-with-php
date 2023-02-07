//  box template
 let boxTemplate = `  <div class="box">
 <div class="image">
    <input type="checkbox" class="check-2">
     <div class="img-box">
         <img src="images/img-icon.png" alt="">
     </div>
 </div>
 <div class="description">
     <div class="d-1">
         <div>
             <img src="images/image%202.png" alt="">
         </div>
         <div>
             <a href="">Edit</a>
         </div>
     </div>

     <h5>Product Name</h5>

     <div class="points">
         <div>
             <p class="pp-1">Quantité <br> <span class="pp-2">1</span></p>
         </div>
         <div>
             <p class="pp-1">Prix <br> <span class="pp-2">15:00€</span></p>
         </div>
         <div>
             <p class="pp-1">Size <br> <span class="pp-2">XL</span></p>
         </div>
         <div>
             <p class="pp-1">Color <br> <span class="pp-2">Bleu</span></p>
         </div>
     </div>
 </div>
</div>`;

//  select left bolck where show box data 


//  select Add box
let addBox = document.querySelector('.addBox');

let addBoxes = ()=>{
    let leftBlock = document.querySelector('.left-block');
    leftBlock.innerHTML += boxTemplate; 
}


// top check box select
let classclickCounter= 0;
   
let detectevent = ()=>{
    let  anycheck = 0;
    const check = document.querySelector('#check');
    let check2 = document.querySelectorAll('.check-2');
    let imageparentDiv = document.querySelectorAll('.imageparentDiv');
   let editimagebox = document.querySelector('#editimagebox'); 
   
   let imageLinkupdate = document.querySelectorAll('.imageLinkupdate');
 
    let selectbincolor = document.querySelector('#selectbincolor');
    let selectbincolor2 = document.querySelector('#selectbincolor2');
    for(i=0; i<check2.length; i++ ){
        if(check.checked){
            check2[i].checked = true;
        }
        if(check2[i].checked){
            anycheck++;
            selectbincolor.style.display = "block";
            selectbincolor2.style.display = "none";
        }
    }
    if(anycheck < 1){
        selectbincolor.style.display = "none";
        selectbincolor2.style.display = "block"; 
    }

    //  img detect loop
    for(i=0; i<imageparentDiv.length;i++){
        imageparentDiv[i].addEventListener('click',()=>{
           
            editimagebox.style.display = "flex";

        })
    }
}
let loadFile = function(event) {
    let imageLinkupdate = document.querySelectorAll('.imageLinkupdate');
   console.log(classclickCounter);
    imageLinkupdate[classclickCounter].src = URL.createObjectURL(event.target.files[0]);
};

detectevent();
let deleteProduct =()=>{
  const check2 = document.querySelectorAll('.check-2');
  const box = document.querySelectorAll('.box');
    for(i=0; i<check2.length;i++ ){
        if(check2[i].checked){
            box[i].remove();
        }
    }
}
//   for image change 





let closeimageeditDiv = ()=>{
    editimagebox.style.display = "none";
}