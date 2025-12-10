import streamlit as st
import requests

st.title("🎧 Spotify Player OTG")

# User input: Spotify link (show, episode, artist, album, or track)
url = st.text_input("Enter a Spotify link:")

if url:
    api_url = f"https://open.spotify.com/oembed?url={url}"
    
    try:
        response = requests.get(api_url)
        data = response.json()
        
        # Show metadata
        st.subheader("Embed Metadata")
        st.write(f"**Provider:** {data.get('provider_name')}")
        st.write(f"**Title:** {data.get('title')}")
        if data.get("thumbnail_url"):
            st.image(data["thumbnail_url"], width=150)
        
        # Render the embed HTML
        if "html" in data:
            st.subheader("Embedded Player")
            st.components.v1.html(data["html"], height=data.get("height", 152))
        else:
            st.error("No embeddable content found for this Spotify link.")
    except Exception as e:
        st.error(f"Error fetching embed: {e}")
