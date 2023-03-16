const handlecopy = () =>{
    var text = document.getElementById("vk");
    text.select();
    navigator.clipboard.writeText(text.value);

}