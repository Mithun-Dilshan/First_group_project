

function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
  const imgDiv = document.querySelector('.profile');
  const img =document.querySelector('.photo');
  const file = document.querySelector('#file');
  const uplodbtn = document.querySelector('.uplodbtn');
  
  
  
  file.addEventListener ('change',function() 
    
  {
  
  
    const choosedFile = this.Files[0];
  
    if (chooseFile){
  
      const reader = new FileReader();
  
      reader.addEventListener('load',function(){
        img.setAttribute('src',reader.result);
      });
      reader.readAsDataURL(choseFile);
    }
  }
  );