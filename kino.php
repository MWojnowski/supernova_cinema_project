<script type=text/javascript>
<?php
    echo "let sala1 = '$ktorasala'; console.error();"; //podstawienie zmiennej z php w js odpowiadajace za wyswietlana sale
?>
// alert(sala1);
let sala = document.getElementById('rzedy');

switch(sala1) //sprawdzenie sali dla danego seansu
{
    case("1"):
        sala_pierwsza();
        break;
    case("2"):
        sala2();
        break;
    case("3"):
        sala3();
        break;
    case("4"):
        sala4();
        break;
    case("5"):
        sala5();
        break;
    case("6"):
        sala6();
        break;
    case("7"):
        sala7();
        break;
    case("8"):
        sala8();
        break;
    case("9"):
        sala9();
        break;
    
    default:
        alert("inna sala");
        break;
}

//funkcje sal 1-9 odpowiadaja za tworzenie i podminanie miejsc do html 
function sala_pierwsza()
{
    let al =10;
    for(let i = 1;i<51;i++)
    {
        
        console.log(al);
        al++;
        if(al==11)
        {
            al=1;
        }
            if(i%10==0)
            {
                let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                let br = document.createElement('br');
                sala.appendChild(br);
                miejsce.innerHTML= al;
            
            }
            else
            {
            let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                miejsce.innerHTML= al;
            }
        }
    
    
}
function sala2()
{
    let al =10;
    for(let i = 1;i<51;i++)
    {
        
        console.log(al);
        al++;
        if(al==11)
        {
            al=1;
        }
            if(i%10==0)
            {
                let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                let br = document.createElement('br');
                sala.appendChild(br);
                miejsce.innerHTML= al;
            
            }
            else
            {
            let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                miejsce.innerHTML= al;
            }
        }
    
    
}
function sala3()
{
    let al =10;
    for(let i = 1;i<51;i++)
    {
        
        console.log(al);
        al++;
        if(al==11)
        {
            al=1;
        }
            if(i%10==0)
            {
                let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                let br = document.createElement('br');
                sala.appendChild(br);
                miejsce.innerHTML= al;
            
            }
            else
            {
            let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                miejsce.innerHTML= al;
            }
        }
    
    
}
function sala4()
{
    let al =10;
    for(let i = 1;i<51;i++)
    {
        
        console.log(al);
        al++;
        if(al==11)
        {
            al=1;
        }
            if(i%10==0)
            {
                let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                let br = document.createElement('br');
                sala.appendChild(br);
                miejsce.innerHTML= al;
            
            }
            else
            {
            let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                miejsce.innerHTML= al;
            }
        }
    
    
}
function sala5()
{
    let al =10;
    for(let i = 1;i<51;i++)
    {
        
        console.log(al);
        al++;
        if(al==11)
        {
            al=1;
        }
            if(i%10==0)
            {
                let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                let br = document.createElement('br');
                sala.appendChild(br);
                miejsce.innerHTML= al;
            
            }
            else
            {
            let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                miejsce.innerHTML= al;
            }
        }
    
    
}
function sala6()
{
    let al =10;
    for(let i = 1;i<51;i++)
    {
        
        console.log(al);
        al++;
        if(al==11)
        {
            al=1;
        }
            if(i%10==0)
            {
                let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                let br = document.createElement('br');
                sala.appendChild(br);
                miejsce.innerHTML= al;
            
            }
            else
            {
            let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                miejsce.innerHTML= al;
            }
        }
    
    
}
function sala7()
{
    let al =10;
    for(let i = 1;i<51;i++)
    {
        
        console.log(al);
        al++;
        if(al==11)
        {
            al=1;
        }
            if(i%10==0)
            {
                let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                let br = document.createElement('br');
                sala.appendChild(br);
                miejsce.innerHTML= al;
            
            }
            else
            {
            let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                miejsce.innerHTML= al;
            }
        }
    
    
}
function sala8()
{
    let al =10;
    for(let i = 1;i<51;i++)
    {
        
        console.log(al);
        al++;
        if(al==11)
        {
            al=1;
        }
            if(i%10==0)
            {
                let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                let br = document.createElement('br');
                sala.appendChild(br);
                miejsce.innerHTML= al;
            
            }
            else
            {
            let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                miejsce.innerHTML= al;
            }
        }
    
    
}
function sala9()
{
    let al =10;
    for(let i = 1;i<51;i++)
    {
        
        console.log(al);
        al++;
        if(al==11)
        {
            al=1;
        }
            if(i%10==0)
            {
                let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                let br = document.createElement('br');
                sala.appendChild(br);
                miejsce.innerHTML= al;
            
            }
            else
            {
            let miejsce = document.createElement('div');
                miejsce.classList.add("<?=$Stan_Miejsca?>");
                sala.appendChild(miejsce);
                miejsce.setAttribute('Id',i)
                miejsce.innerHTML= al;
            }
        }
    
    
}
function powrót()
{
    location.href="controlpanel.php";
    //powrot to wyboru seansu
}

let liczba = 0;
document.getElementById('input').style.pointerEvents= 'none'; // odpowiada za mozliwosc przejscia do podsumowania jak rowniez odpowada ze mozliwosc wybioru miejsc, zmieniajac ich klasy
document.querySelectorAll('.miejsce, .active').forEach(item => {
    item.addEventListener('click', event => {  
        if(liczba <5 && item.classList.contains('miejsce'))
        {
            item.classList.add('active');
            item.classList.remove('miejsce');
            liczba++;
            console.log(liczba, item.getAttribute('Id'));
            document.cookie = liczba+"="+item.getAttribute('Id')
            if(document.querySelectorAll('.active').length !=0)
            {
                document.getElementById('input').style.pointerEvents= 'auto';
            }
            else
            {
                document.getElementById('input').style.pointerEvents= 'none';
            }
            
        }
        else if(item.classList.contains('active') && liczba >0)
        {
            item.classList.remove('active');
            item.classList.add('miejsce');
            liczba--;
            console.log(liczba);
            document.cookie = liczba+"=";
            if(document.querySelectorAll('.active').length !=0)
            {
                document.getElementById('input').style.pointerEvents= 'auto';
            }
            else
            {
                document.getElementById('input').style.pointerEvents= 'none';
            }
        } 
        else
        {
            alert("wybrano maksymalna ilosc miejsc na 1 os");
        }
        
    })
})
let zaje;
<?php zaj(); ?>
</script>
