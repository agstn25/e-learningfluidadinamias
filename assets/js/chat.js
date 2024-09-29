// chat.js

// Get chat messages from PHP script
fetch('chat.php')
  .then(response => response.json())
  .then(messages => {
    // Display chat messages
    const chatContainer = document.getElementById('chat-container');
    messages.forEach(message => {
      const messageHTML = `
        <div>
          <span>${message.username}</span>
          <p>${message.message}</p>
        </div>
      `;
      chatContainer.innerHTML += messageHTML;
    });
  });

// Send new chat message
const sendMessageForm = document.getElementById('send-message-form');
sendMessageForm.addEventListener('submit', event => {
  event.preventDefault();
  const messageInput = document.getElementById('message-input');
  const message = messageInput.value.trim();
  if (message !== '') {
    // Send message to PHP script to store in database
    fetch('send_message.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ message: message })
    })
      .then(response => response.json())
      .then(data => {
        // Display new message
        const chatContainer = document.getElementById('chat-container');
        const messageHTML = `
          <div>
            <span>You</span>
            <p>${message}</p>
          </div>
        `;
        chatContainer.innerHTML += messageHTML;
        messageInput.value = '';
      });
  }
});