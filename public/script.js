console.log("Hello world");

const deleteBtn = document.querySelectorAll('div.comment-container button');

console.log(deleteBtn);

for(const btn of deleteBtn) {
    btn.addEventListener('click', (e) => {
        let parentElem = e.target.parentElement;
        let commentId = parentElem.getAttribute('data-comment-id');
        makeRequest(commentId, parentElem);
    })
}


const makeRequest = async (id, commentContainer) => {
      //Add data to req body
      let req = await fetch(`/forum/index.php?action=deleteComment&commentToDelete=${id}`, {
        method: 'GET',
      }).then(res => res.json())
        .then(function() {
            console.log(commentContainer);
            commentContainer.remove();   
        });
}