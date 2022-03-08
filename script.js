setValues();
// function to create the poster 
function create() {
    // remove prev generated poster to generate new one
    document.getElementById("render").innerHTML = "";
    html2canvas(document.querySelector("#capture")).then(canvas => {
    document.getElementById("render").appendChild(canvas);
    });
}


// function to download poster
async function download() {
    // create()

    // const sleep = ms => new Promise(r => setTimeout(r, ms));
    // await sleep(4*1000)

    // document.getElementById("render").innerHTML = "";
    var mobile = null;
    var landscape = null;
    await html2canvas(document.querySelector("#captureMobile")).then(canvas => {
        // document.getElementById("render").appendChild(canvas);
        mobile = canvas.toDataURL("image/png");
        // const download = document.getElementById("download");
        // let image = canvas.toDataURL("image/png")
        // .replace("image/png", "image/octet-stream");
        // download.setAttribute("href", image);
    });

    await html2canvas(document.querySelector("#captureLandscape")).then(canvas => {
        landscape = canvas.toDataURL("image/png");
    });


    console.log(mobile);
    console.log(landscape);


    

}

function setValues() {
    var title = document.querySelector('[data-id="title"]');
    var titleText = document.querySelector(".title");
    var desc = document.querySelector('[data-id="desc"]');
    var descText = document.querySelector(".desc");
    var name = document.querySelector('[data-id="name"]');
    var nameText = document.querySelector(".name");
    var role = document.querySelector('[data-id="role"]');
    var roleText = document.querySelector(".role");
    var date = document.querySelector('[data-id="date"]');
    var dateText = document.querySelector(".date");
    var time = document.querySelector('[data-id="time"]');
    var timeText = document.querySelector(".time");

    if (getTitle())
    {
        title.innerHTML = getTitle();
        titleText.innerHTML = getTitle();
    }
    if (getDesc())
    {
        desc.innerHTML = getDesc();
        descText.innerHTML = getDesc();
    }
    if (getName())
    {
        name.innerHTML = getName();
        nameText.innerHTML = getName();
    }
    if (getRole())
    {
        role.innerHTML = getRole();
        roleText.innerHTML = getRole();
    }
    if (getDate())
    {
        date.innerHTML = getDate();
        dateText.innerHTML = getDate();
    }
    if(getTime())
    {
        time.innerHTML = getTime();
        timeText.innerHTML = getTime();
    }
    

    // var desc = document.querySelector('[data-id="desc"]');
    // const queryText = document.querySelector(".desc");
    // if (getDesc())
    // {
    //     desc.innerHTML = getDesc();
    //     queryText.innerHTML = getDesc();
    // }

}

//function to upload speaker image
const image_input = document.querySelector("#image_input");
var uploaded_img = "";

image_input.addEventListener("change", function(){
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_img = reader.result; //read uploaded image
        document.querySelector("#show_img").style.backgroundImage = `url(${uploaded_img})`
    });
    reader.readAsDataURL(this.files[0]);
    // console.log(image_input.value);
})
 
//upload bg image
const bg_input = document.querySelector("#bg_input");
var uploaded_bg = "";

bg_input.addEventListener("change", function(){
    const readFile = new FileReader();
    readFile.addEventListener("load", () => {
        uploaded_bg = readFile.result;
        document.querySelector("#show_bg").style.backgroundImage = `url(${uploaded_bg})`
    });
    readFile.readAsDataURL(this.files[0]);
})

// receive user input for poster title (class/id - querySelector #)
// document.querySelector("#textarea")
document.querySelectorAll("textarea").forEach(textarea => 
    textarea.addEventListener("keyup", function(){
    var id = textarea.dataset.id;
    console.log(id);
    if(id == "title"){
        const queryText = document.querySelector(".title");
        // const queryText = document.querySelector('[data-id="title"]');
        if(this.value != ""){
            queryText.innerHTML = this.value;
        }
        else {
            queryText.innerHTML = "Enter poster title";
        }
    }
    else if(id == "desc"){
        const queryText = document.querySelector(".desc");
        if(this.value != ""){
            queryText.innerHTML = this.value;
        }
        else {
            queryText.innerHTML = "Enter a description";
        }
    }
    else if(id == "name"){
        const queryText = document.querySelector(".name");
        if(this.value != ""){
            queryText.innerHTML = this.value;
        }
        else {
            queryText.innerHTML = "Enter speaker name";
        }
    }
    else if(id == "role"){
        const queryText = document.querySelector(".role");
        if(this.value != ""){
            queryText.innerHTML = this.value;
        }
        else {
            queryText.innerHTML = "Enter speaker role";
        }
    }
    else if(id == "date"){
        const queryText = document.querySelector(".date");
        if(this.value != ""){
            queryText.innerHTML = this.value;
        }
        else {
            queryText.innerHTML = "Enter a date";
        }
    }
    else if(id == "time"){
        const queryText = document.querySelector(".time");
        if(this.value != ""){
            queryText.innerHTML = this.value;
        }
        else {
            queryText.innerHTML = "Enter a time";
        }
    }

}))

function getTitle() {
    return localStorage.getItem("title");
}

function getDesc() {
    return localStorage.getItem("desc");
}

function getName() {
    return localStorage.getItem("name");
}

function getRole() {
    return localStorage.getItem("role");
}

function getDate() {
    return localStorage.getItem("date");
}

function getTime() {
    return localStorage.getItem("time");
}

function updateHTML() {
    var title = getTitle();
    document.querySelector('[data-id="title"]').innerHTML = title;

    var desc = getDesc();
    document.querySelector('[data-id="desc"]').innerHTML = desc;

    var name = getName();
    document.querySelector('[data-id="name"]').innerHTML = name;

    var role = getRole();
    document.querySelector('[data-id="role"]').innerHTML = role;

    var date = getDate();
    document.querySelector('[data-id="date"]').innerHTML = date;

    var time = getTime();
    document.querySelector('[data-id="time"]').innerHTML = time;

}

function storeValues() {
    //take input values
    var title = document.querySelector('[data-id="title"]').value;
    var desc = document.querySelector('[data-id="desc"]').value;
    var name = document.querySelector('[data-id="name"]').value;
    var role = document.querySelector('[data-id="role"]').value;
    var date = document.querySelector('[data-id="date"]').value;
    var time = document.querySelector('[data-id="time"]').value;
    
    //save into local storage
    localStorage.setItem("title", title);
    localStorage.setItem("desc", desc);
    localStorage.setItem("name", name);
    localStorage.setItem("role", role);
    localStorage.setItem("date", date);
    localStorage.setItem("time", time);
    //update HTML
    updateHTML();
    console.log(localStorage);
}
 
// document.querySelectorAll("textarea").addEventListener("keyup", function(){
//     console.log(this.dataset.id);
    
//     var id = this.dataset.id;
    
    

// })
