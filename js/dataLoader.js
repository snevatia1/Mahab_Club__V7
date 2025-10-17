export async function loadJSON(path){
  try {
    const res = await fetch(path, {cache:'no-store'});
    if(!res.ok) throw new Error('HTTP '+res.status);
    return await res.json();
  } catch (e) {
    console.warn('[loadJSON] Fallback engaged for', path, e);
    return []; // never throw, keep app running
  }
}