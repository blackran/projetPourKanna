var errorPass = document.querySelector('form #errorP');
var errorFirst = document.querySelector("form #errorF");
var first = document.querySelector('form #first');
var pass = document.querySelector('form #pass');
var btn = document.querySelector('#btn');
if(btn != null){
  btn.addEventListener('click', function(e){
    if(first.value==""){
      errorFirst.innerText="champ name required";
      e.preventDefault();
    }else{
      errorFirst.innerText="";
    }
    if(pass.value==""){
      errorPass.innerText="champ password required";
      e.preventDefault();
    }else{
      errorPass.innerText="";
    }
  })
}
$('form #first').keyup(function(){
  var exp = new RegExp("^[a-zA-Z]*$","g");
  var resp = exp.test(this.value);
  console.log(resp);
  // var three = this.value.substring(0);
  // if(parseInt(three[0]) in [0,1,2,3,4,5,6,7,8,9]){
  //     this.value="";
  //     errorFirst.innerText="not begin chiffre";
  //   }else{
  //     errorFirst.innerText="";
  //   }
});
$('form #pass').keyup(function(){
    var three = this.value;

    if(three.length > 9){
        this.value = this.value.substring(0,9);
        console.log(three);
    }
});
