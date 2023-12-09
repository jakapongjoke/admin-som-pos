
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
      console.log(data,"post req")
        return await instance.post(url,data,options);
    

}
async function SendAjaxPut(url,data,options={}){
    console.log(data,"put req")

    // let dataReq;
    // dataReq = data;
    // if(parseData===true){
    //       const dataReq = JSON.parse(data);
    //   dataReq._method = "put";
    // }else{
    //     dataReq = data;
    // }
        return await instance.put(url,data,options);
    

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