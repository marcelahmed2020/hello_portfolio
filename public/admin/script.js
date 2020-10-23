// document.getElementById('newsValidateForm').on("click",newsValidateForm);

function newsValidateForm() {
    const title               = document.getElementById('title');
    const textTitle           = document.getElementById('text-title');
    const desc                = document.getElementById('desc');
    const textDesc            = document.getElementById('text-desc');
    const textChannels_id     = document.getElementById('text-channels_id');
    const channels_id         = document.getElementById('channels_id');
    if (title.value ==null || title.value ==""){
        textTitle.textContent = "Title should be validate.";
        textTitle.style.color = 'red';
    }else if(title.value.length < 3){
      textTitle.textContent = "title must be at least 4 characters.";
      textTitle.style.color = 'red';
    }
    if (desc.value ==null || desc.value ==""){
        textDesc.textContent = "Title should be validate.";
        textDesc.style.color = 'red';
    }else if(desc.value.length < 3){
      textDesc.textContent = "title must be at least 4 characters.";
      textDesc.style.color = 'red';
    }
    if (channels_id.value ==null || channels_id.value ==""){
        channels_id.textContent = "Channel should be validate.";
        channels_id.style.color = 'red';
    }
    if (channels_id.value ==null || channels_id.value ==""|| title.value ==null || title.value =="" || desc.value ==null || desc.value == "" || title.value.length < 3 || desc.value.length < 3){
      return false;
    }
   return( true );

}
// repliesValidateForm
function repliesValidateForm() {
    const desc                = document.getElementById('desc');
    const textDesc            = document.getElementById('text-desc');
    const textnews_id     = document.getElementById('text-news_id');
    const news_id         = document.getElementById('news_id');
    if (desc.value ==null || desc.value ==""){
        textDesc.textContent = "Title should be validate.";
        textDesc.style.color = 'red';
        desc.focus();
    }else if(desc.value.length < 3){
        textDesc.textContent = "title must be at least 4 characters.";
        textDesc.style.color = 'red';
        desc.focus();
    }
    if (news_id.value ==null || news_id.value ==""){
        textnews_id.textContent = "Article should be validate.";
        textnews_id.style.color = 'red';
        news_id.focus();
    }
    if (news_id.value ==null || news_id.value =="" || desc.value ==null || desc.value == "" || desc.value.length < 3){
        return false;
        }
    return( true );
}

// channelsValidateForm

function channelsValidateForm() {
     const texttitle            = document.getElementById('text-title');
    const title               = document.getElementById('title');
    if (title.value ==null || title.value ==""){
        texttitle.textContent = "Title should be validate.";
        texttitle.style.color = 'red';
        desc.focus();
    }else if(title.value.length < 2){
        texttitle.textContent = "title must be at least 3 characters.";
        texttitle.style.color = 'red';
        desc.focus();
    }

    if (title.value == null || title.value == "" || title.value.length < 3){
        return false;
    }
    return( true );
}
