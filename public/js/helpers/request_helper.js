
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
async function SendAjaxPost(url,data,options={}){
      
        return await instance.post(url,data,options);
    

}
async function SendAjaxPut(url,data,options={}){
      const dataReq = JSON.parse(data);
      dataReq._method = "put";
      console.log(dataReq)
        return await instance.put(url,dataReq,options);
    

}
async function SendAjaxDelete(url,data,options={}){
      
        return await instance.delete(url,data,options);
    

}
async function SendAjaxGet(url){


        return await instance.get(url);
    

}

async function validateData (data,validatorUrl=""){
    
    let validate = await SendAjaxPost(validatorUrl,data);
    if(validate.data.status=="complete"){
        return true;
    }else{
        return false;
    }
}