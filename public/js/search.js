
const reverse_filter = (data_tag) => {
    let alloweds = []
    for (const box of document.getElementsByClassName('index_filters')){
        if (box.checked) {
            alloweds.push(box.getAttribute('data-'+data_tag));
        }
    } 

    let alls = document.getElementsByClassName('card_out')
    if (alloweds.length == 0) {
        for (const card of alls) {
            if (card.classList.contains('filter_hide')) {
                card.classList.remove('filter_hide')
        }
    }
    return;
}

    for (const card of alls) {
        for (const allow of alloweds) {
            if (card.getAttribute('data-'+data_tag).includes(allow)) {
                if (card.classList.contains('filter_hide')) {
                    card.classList.remove('filter_hide')
                }}
            else {
                    if (!card.classList.contains('filter_hide')) {
                        card.classList.add('filter_hide')
                }
            }

        }
    }
}

const runfilter = (data_tag) => {
    let alloweds = []
    for (const box of document.getElementsByClassName('index_filters')){
        if (box.checked) {
            alloweds.push(box.getAttribute('data-'+data_tag));
        }
    } 
    
    let alls = document.getElementsByClassName('card_out')
    console.log(alloweds)
    if (alloweds.length == 0) {
        console.log("yuh")
        
        for (const card of alls) {
            console.log(card)
            card.classList.remove('filter_hide');
        return;
    }}
    
    // console.log(alloweds)
    for (const card of alls) {  
        // console.log(card.getAttribute('data-'+data_tag))
        if (alloweds.includes(card.getAttribute('data-'+data_tag))) {
            if (card.classList.contains('filter_hide')) {
                card.classList.remove('filter_hide')
            }}
        else {
                if (!card.classList.contains('filter_hide')) {
                    card.classList.add('filter_hide')
            }
        }
    }
}

const runsearch = (term, selector=".card_title") => {
    term = term.toLowerCase()
    let alls = document.getElementsByClassName("card_out");
    for (const card of alls) {
        let title = card.querySelectorAll(selector)[0].childNodes[0].textContent;
        console.log(title.innerHtml)
        console.log(title)
        if ((title && title.toLowerCase().includes(term) || term == "")) {
            if (card.classList.contains('search_hide')) {
                card.classList.remove('search_hide')
            }
        } else {
            if (!card.classList.contains('search_hide')) {
                card.classList.add('search_hide')
            }
        }
        // console.log(card)
        console.log();
    }
    
}