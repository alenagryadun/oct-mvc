
    var edit = document.getElementsByName('editBtn');
    for (var i=0; i<edit.length ; i++){
        edit[i].onclick = function(){
            var id = this.getAttribute('id');
            var save = document.getElementsByName('saveBtn');
            var task = document.getElementsByName('taskText');
            for (var j=0; j<save.length;j++){
                if (save[j].getAttribute('id')== id){
                    task[j].removeAttribute('disabled');
                    save[j].classList.remove('hidden');
                    break;
                };
            }
        };
    };



