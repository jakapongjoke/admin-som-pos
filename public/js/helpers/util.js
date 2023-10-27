function nullToZero(data){
    if(!data ){
        console.log(data + 'is n')
        let n = parseFloat("0.00");
        return n;
    }else{
        console.log('y')
        return data;
    }
}

function showFloat(data,numberDecimal=2){
    let num = nullToZero(data);
    return parseFloat(num).toFixed(numberDecimal)
}

function getPathFromUrl(url) {
    const pathRegex = /^(?:(https?:\/\/)?(www\.)?[^/]+)?(\/[^?#]*)/;
    const match = url.match(pathRegex);
    if (match && match[3]) {
      return match[3];
    } else {
      return "";
    }
  }



  