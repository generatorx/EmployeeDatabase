let cardBody = document.querySelector(".card-body");
let cardTitle = document.querySelector(".card-title");

document.querySelectorAll('div .card-body h4').forEach((node)=>{
    node.ondblclick = function() {
        let val = this.innerHTML;
        let input = document.createElement("input");
        input.value = val;
        input.onblur = function() {
            var val = this.value;
            this.parentNode.innerHTML = val;
        }
        this.innerHTML = "";
        this.appendChild(input);
        input.focus();
    }
});