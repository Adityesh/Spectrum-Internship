const presentBtns = document.querySelectorAll('.present');
const absentBtns = document.querySelectorAll('.absent');

for (var i = 0; i < presentBtns.length; i++) {
    const btn1 = presentBtns[i];
    presentBtns[i].addEventListener('click', function(event) {
        let date = btn1.parentElement.firstChild.className;
        let id = btn1.parentElement.firstChild.id;

        const form = document.createElement('form');
        form.style.display = 'none';
        document.body.appendChild(form);
        form.action = 'present.php';
        form.method = 'post';
        input1 = document.createElement('input');
        input1.type = 'hidden';
        input1.name = 'id';
        input1.value = id;
        input2 = document.createElement('input');
        input2.type = 'hidden';
        input2.name = 'date';
        input2.value = date;
        form.appendChild(input1);
        form.appendChild(input2);
        form.submit();
    });
}


for (var i = 0; i < absentBtns.length; i++) {
    const btn = absentBtns[i];
    absentBtns[i].addEventListener('click', function(event) {
        let date = btn.parentElement.firstChild.className;
        let id = btn.parentElement.firstChild.id;

        const form = document.createElement('form');
        form.style.display = 'none';
        document.body.appendChild(form);
        form.action = 'absent.php';
        form.method = 'post';
        input1 = document.createElement('input');
        input1.type = 'hidden';
        input1.name = 'id';
        input1.value = id;
        input2 = document.createElement('input');
        input2.type = 'hidden';
        input2.name = 'date';
        input2.value = date;
        form.appendChild(input1);
        form.appendChild(input2);
        form.submit();


    });
}