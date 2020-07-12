import settings from './settings.js';

export function callAPI (char, emotion) {
  const url = new URL(`${settings.apiURL}`);
  url.searchParams.append('key', `${char}_${emotion}`);
  return fetch(url, {
    method: 'GET',
  });
}

export function getTemplate (key) {
  switch (key) {
    case 'left':
      return `<div class="emote_wrapper left {{{character_name_class}}}">
                <div class="emote">
                  <img id="{{{uuid}}}" src="{{{URL}}}" />
                  <span class="nameplate">{{{character_name}}}</span>
                </div>
                <div class="dialog">{{{character_dialog}}}</div>
              </div>`;
    case 'right':
      return `<div class="emote_wrapper right {{{character_name_class}}}">
                <div class="dialog">{{{character_dialog}}}</div>
                <div class="emote">
                  <img id="{{{uuid}}}" src="{{{URL}}}" />
                  <span class="nameplate">{{{character_name}}}</span>
                </div>
              </div>`;
    default:
      console.error('No template matches ' + key);
  }
}
