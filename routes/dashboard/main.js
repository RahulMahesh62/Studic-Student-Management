$(".btnedit").click(e => {
    let textvalues = displayData(e);
    let id = $("input[name*='id']");
    let sname = $("input[name*='name']");
    let semester = $("input[name*='semester']");
    let department = $("input[name*='dept']");
    id.val(textvalues[0]);
    sname.val(textvalues[1]);
    semester.val(textvalues[2]);
    department.val(textvalues[3]);
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];
    for (const value of td) {
        if (value.dataset.id == e.target.dataset.id) {
            textvalues[id++] = value.textContent;
        }
    }
    return textvalues;
}