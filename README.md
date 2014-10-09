# edX Chat Client



## Requirements
You will need a running XMPP server, we use ejabberd.  The server must be configured to allow anonymous connections, and unauthenticated connections.  The server should also be configured to allow non-unique usernames.

## Installation
First, install and configure the XMPP server.

Download the supplied code and host it on a publicly accessible server.

Edit the index.php file and set the variables at the top (in particular the server) to your server URL.

Within edX, add the following code which should run the chat client:

```
<p><iframe id='chatwindow' width="100%" height="500" marginwidth="0" marginheight="0" frameborder="0" scrolling="no">You need an iFrame capable browser to participate in chat.</iframe></p>

<script type='text/javascript'>
  var username = $('span.account-username').attr('title');
  var coursepos = $('ol#sequence-list a.active').data('id');
  if(!username) {
    username = $('a.user-link').text();
    if(username) {
      username = username.split('Dashboard for:');
      username = username[1].trim();
    }
  }
  if(!username) {
    username = "Anonymous"; 
  }
  if(!coursepos) {
    coursepos = 'studio';
  } else {
    console.log(coursepos);
    coursepos = coursepos.replace('i4x://','');
    coursepos = coursepos.split('/').join('_');
  }
  console.log(coursepos);
  $('#chatwindow').attr('src','{{YOUR_SERVER_ADDRESS}}?room='+coursepos+'&username='+username);
</script>
```

Where {{YOUR_SERVER_ADDRESS}} is the address of your server running this code.

##License
This project is licensed under the terms of the MIT license.

The module is built on top of the Candy-Chat jabber client - https://github.com/candy-chat/

##Contact
The best contact point apart from opening github issues or comments is to email technical@uqx.uq.edu.au