//Class-74: Topic: Assignment showcase and Problem solving from Codeforces Platform


//Perfect Root (Solved);

const fs = require("fs");
 
const input = fs.readFileSync(0, "utf8").trim().split(/\s+/);       //Codeforces's code editor related code
 
let idx = 0;
 
const t = Number(input[idx++]);
 
for (let tc = 0; tc < t; tc++) {
    const n = Number(input[idx++]);    
    
    let ans = [];
    
    for(let i = 1; i <= n; i++){       //Solution code
        ans.push(i);          
    }
 
 
    console.log(ans.join(" "));
}


