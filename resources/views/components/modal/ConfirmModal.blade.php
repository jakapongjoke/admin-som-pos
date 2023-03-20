
<script>


jQuery(document).ready(function($){
    let messageConfirmArr = ['{!!$data["messageConfirm"]["heading"]!!}','{!!$data["messageConfirm"]["message"]!!}','{!!$data["messageConfirm"]["image"]!!}'];
    let messageDoneArr = ['{!!$data["messageDone"]["heading"]!!}','{!!$data["messageDone"]["message"]!!}','{!!$data["messageDone"]["image"]!!}'];


    modalFormSubmitTrigger(messageConfirmArr,messageDoneArr,'{!!$data["validateUrl"]!!}','{!!$data["requestUrl"]!!}');

    

});
</script>