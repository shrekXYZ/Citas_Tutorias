const teamMembers = [
    {
        src:'./img/logosantos.png',
        name:'Diego Trejo',
        alias:'@TheTrejo',
        email:'juandiego6290@gmail.com',
        status:'Profesor',
        tags:['profesor']
    },
    {
        src:'./img/logomonterrey.png',
        name:'Angel Sebastian',
        alias:'@Angel78',
        email:'angel@gmail.com',
        status:'Alumno',
        tags:['Alumno']
    },
    
]
let tableRowCount = document.getElementsByClassName('table-row-count')
tableRowCount[0].innerHTML = '';
let tableBody= document.getElementById('team-member-rows')
const itemsOnPage=2;
const numberOfPages=Math.ceil(
    teamMembers.length / itemsOnPage
)
const start =(new URLSearchParams(window.location.search)).get('page') || 1;
const mappedRecords= teamMembers
.filter((_, i)=>(
    ((start - 1) * itemsOnPage)<i+1) && (i+1 <=start * itemsOnPage)
)
.map(
    (teamMember)=>{
        return `<tr>
        <td class="team-member-profile">
            <img src="${teamMember.src}" alt="${teamMember.name}">
            <span class="profile-info">
                <span class="profile-info__name">
                 ${teamMember.name}
                </span>
                <span class="profile-info__alias">
                 ${teamMember.alias}
                </span>
            </span>
        </td>
        <td>
            <span class="status status--${teamMember.status}">
                ${teamMember.status}
            </span>
        </td>
        <td> ${teamMember.email} </td>
        
        </tr>`;
    }
)
tableBody.innerHTML =mappedRecords.join('');
const pagination =document.querySelector('.pagination')
const linkList=[];

for(let i=0; i<numberOfPages;i++){
    const pageNumber= i+1;
    linkList.push(
        `<li>
        <a href="?page=${pageNumber}"
        ${pageNumber==start ? 'class="active"':''}
        title="page ${pageNumber}">
        ${pageNumber}
        </a>
        </li>`
    )
}
