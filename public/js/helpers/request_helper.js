
let validation = false;
let confirm = false;

async function SendAjaxPost(data,url){
    console.log(await axios.post(url,data));
        return await axios.post(url,data);
    

}

async function validateData (data,validatorUrl=""){
    
    let validate = await SendAjaxPost(data,validatorUrl);
    if(validate.data.status=="complete"){
        return true;
    }else{
        return false;
    }
}