import streamlit as st
from datetime import datetime, timedelta
import time

st.set_page_config(page_title="Live Age Calculator", layout="centered")
st.title("🎂 Live Age Calculator")

# Input: Birthdate
birth_date = st.date_input("Select your birth date")

# Start the live ticker only if a date is selected
if birth_date:
    st.subheader("⏳ Your Current Age")

    # Placeholder for live age display
    age_display = st.empty()

    while True:
        now = datetime.now()
        birth_datetime = datetime.combine(birth_date, datetime.min.time())
        age_delta = now - birth_datetime

        # Breakdown into components
        total_seconds = int(age_delta.total_seconds())
        years = total_seconds // (365 * 24 * 3600)
        months = (total_seconds % (365 * 24 * 3600)) // (30 * 24 * 3600)
        days = (total_seconds % (30 * 24 * 3600)) // (24 * 3600)
        hours = (total_seconds % (24 * 3600)) // 3600
        minutes = (total_seconds % 3600) // 60
        seconds = total_seconds % 60

        age_display.markdown(f"""
        ### 🧮 You are:
        - **{years}** years  
        - **{months}** months  
        - **{days}** days  
        - **{hours}** hours  
        - **{minutes}** minutes  
        - **{seconds}** seconds old
        """)

        time.sleep(1)
