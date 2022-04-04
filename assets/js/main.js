
 
    const container = document.querySelector('#destination_card');
    const valuesCards = [{
        image: '../img/image1.png',
        title: 'title 1',
        content: 'super content 1',
      },
      {
        image: '../img/image2.png',
        title: 'title 2',
        content: 'super content 2'
      },
      {
        image: '../img/image-3.png',
        title: 'title3',
        content: 'blablablablbalbalbabla blablaba'
      },
    ]
    
    function returnCards(valuesCards) {
      return "<div class=\"destination-cards\">" + valuesCards.map(valuesCard => `
      <div>
        <div class="destination-header">
          <img src="${valuesCard.image}"/>
        </div>
        <div class="destination-content">
          <h4>${valuesCard.title}</h4>
          <p>${valuesCard.content}</p>
        </div> 
        <button class="info-button">+ info</button>
      </div>`).join('') + "</div>";
    }
    
    container.innerHTML = returnCards(valuesCards);