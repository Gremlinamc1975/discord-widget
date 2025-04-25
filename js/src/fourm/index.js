import app from 'flarum/forum/app';

app.initializers.add('discord-widget', () => {
  const widget = document.createElement('div');
  widget.className = 'discord-widget-container';
  widget.innerHTML = `
    <iframe src="https://discord.com/widget?id=367115557494849536&theme=dark"
            allowtransparency="true"
            frameborder="0"
            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
    </iframe>
  `;
  document.body.appendChild(widget);
});
