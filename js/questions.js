
function showQuestions() {

    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/api/questions');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var json_text = xhr.responseText;
                var questions = JSON.parse(json_text);
                var tbody = document.querySelector('#questions tbody');
                tbody.innerHTML = '';
                var str = '';
                for (var i = 0; i < questions.length; i++) {
                    str += '<tr><td>' + questions[i].id + '</td><td>' + questions[i].author + '</td><td>' + questions[i].text + '</td></tr>';
                }
                tbody.innerHTML = str;
            } else {
                return false;
            }
        }
    };
    xhr.send();
}
showQuestions();
