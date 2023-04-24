
let validation = false;
let confirm = false;
const baseURL = window.location.origin;
const options = {
    withCredentials:true
}
const instance = axios.create({
    baseURL: baseURL,
    withCredentials:true

  });
async function SendAjaxPost(data,url){
      
        return await instance.post(url,data);
    

}
async function SendAjaxGet(url){


        return await instance.get(url);
    

}

async function validateData (data,validatorUrl=""){
    
    let validate = await SendAjaxPost(data,validatorUrl);
    if(validate.data.status=="complete"){
        return true;
    }else{
        return false;
    }
}