import streamlit as st
from datetime import date

st.title("Age Calculator")

# Input: Date of Birth
dob = st.date_input("Enter your Date of Birth")

# Calculate age
today = date.today()
age = today.year - dob.year - ((today.month, today.day) < (dob.month, dob.day))

# Display result
st.write(f"Your age is: **{age} years**")
