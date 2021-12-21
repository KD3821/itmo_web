
// "use strict";    --- Вопрос к Вам: почему не работает фунция с 'use strict'?

function getForm() {
    let obj = {};
    let sexresult = {};
    let i = 0;
    
    obj["name"] = document.getElementById("name").value;
    obj["surname"] = document.getElementById("surname").value;
    obj["age"] = document.getElementById("age").value;

    inputSex = document.getElementsByName("sex");
    inputSex.forEach( (item) => {
        let oneinsexresult = {};
        oneinsexresult["value"] = item.value;
        if (item.checked == true) {
            oneinsexresult["status"] = "checked";
        } else {
            oneinsexresult["status"] = "false";
        }
        sexresult[i++] = oneinsexresult;
        
    });
    obj["sex"] = sexresult;
    console.log(JSON.stringify(obj));
    return obj;
}