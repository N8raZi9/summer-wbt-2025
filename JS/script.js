function checkHR() {
    var reason = prompt("Why do you want to meet? (job/project)");
 
    if (!reason) {
        alert("Please enter your reason.");
        return;
    }
 
    reason = reason.trim().toLowerCase();
 
    if (reason === "job") {
        var jobType = prompt("Which job type are you interested in? (part-time/full-time/internship)");
        if (!jobType) {
            alert("No job type entered.");
        } else {
            alert("You are interested in a " + jobType.trim() + " job.");
        }
    } else if (reason === "project") {
        var projectType = prompt("Which type of project would you like to do? (ML/Data Science/Others)");
        if (!projectType) {
            alert("No project type entered.");
        } else {
            alert("You are interested in: " + projectType.trim() + " projects.");
        }
    } else {
        alert("Please specify 'job' or 'project'.");
    }
}