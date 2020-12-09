var cardBody = document.querySelector('#card-body');
var addMoreTagsBtn = document.querySelector('#add-more-tags');

    // Add New Tag Event
    addMoreTagsBtn.addEventListener('click', function(event){

        var getTotal = document.querySelectorAll('input[type="text"]').length;
        // Creating Elements
        var newNameDiv = document.createElement('div');
            newNameDiv.className = 'form-group';
        var newNameLabel = document.createElement('label');
            newNameLabel.textContent = 'Name' + " " + (getTotal+1);

        var newNameInput = document.createElement('input');
            newNameInput.type = 'text';
            newNameInput.classList.add('form-control');
            newNameInput.setAttribute('name','name[]');

        var deleteBtn = document.createElement('button');
            deleteBtn.type = 'button';
            deleteBtn.textContent = 'Delete';
            deleteBtn.className = 'btn btn-danger btn-sm';
            deleteBtn.id = 'delete-tag-button';

        newNameDiv.appendChild(newNameLabel)
        newNameDiv.appendChild(newNameInput);
        newNameDiv.appendChild(deleteBtn);
        cardBody.appendChild(newNameDiv);
    });

    //Delete current item
    cardBody.addEventListener('click', function(event){
        if(event.target.id == 'delete-tag-button')
        {
            event.target.parentNode.remove();
        }
    })