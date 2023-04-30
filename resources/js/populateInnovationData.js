class innovation {
    constructor (id, title,description,intro,funcName1, funcInfo1, funcName2, funcInfo2, funcName3, funcInfo3) {
      this.id = id;
      this.title = title;
      this.desc = description;
      this.intro = intro;

      this.functionalities = [
           { name: funcName1, info: funcInfo1},
           { name: funcName2, info: funcInfo2},
           { name: funcName3, info: funcInfo3},
      ]
    }
}

const waterIncidentSystem = new innovation(
    '1',
    'water incident system',
    'The system to register parcels and monitor their transportation to desired destinations',
    'The system to register parcels and monitor their transportation to desired destinations',
    'functionality 01',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit rerum magnam at architecto debitis praesentium delectus corrupti cumque natus amet!',
    'functionality 02',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit rerum magnam at architecto debitis praesentium delectus corrupti cumque natus amet!',
    'functionality 03',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit rerum magnam at architecto debitis praesentium delectus corrupti cumque natus amet!');


    const childLink = document.querySelector('.current-child-lnk');

    const populateView = (title)=> {

        if(title){
            childLink.innerHTML = waterIncidentSystem.title;
        }
        else {
            childLink.innerHTML = "no data parsed";
        }
       
    }