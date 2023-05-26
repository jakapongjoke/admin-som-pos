async function fetchdata(url){
    try {
        const response = await axios.get(url);
        return response.data;
      } catch (error) {
        console.error(error);
      }
}