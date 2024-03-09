# Define estimates for frontend and backend development
frontend_estimates = {
    "Integration with Algolia InstantSearch": {"lower": 30, "upper": 50},
    "Customizing Search UI/UX": {"lower": 20, "upper": 35},
    "Implementing Dynamic Filtering and Facets": {"lower": 20, "upper": 30},
    "Personalization and A/B Testing": {"lower": 15, "upper": 25},
    "Geo-Search Integration": {"lower": 20, "upper": 30}  # (if applicable)
}
backend_estimates = {
    "Indexing Data with Algolia": {"lower": 30, "upper": 50},
    "Custom Ranking and Relevance Configuration": {"lower": 25, "upper": 40},
    "Backend API Integration": {"lower": 30, "upper": 50},
    "Analytics and Monitoring Setup": {"lower": 20, "upper": 35},
    "Optimizing Search Performance": {"lower": 25, "upper": 40}
}
#  calculate estimated days and weeks
def calculate_time(estimates):
    lower_bound_total = sum([estimate["lower"] for estimate in estimates.values()])
    upper_bound_total = sum([estimate["upper"] for estimate in estimates.values()])
    
    lower_bound_weeks = lower_bound_total / 40  # Assuming 40 hours/week productivity
    upper_bound_weeks = upper_bound_total / 40
    
    lower_bound_days = lower_bound_total / 8  # Assuming 8 hours/day pyet oigenin
    upper_bound_days = upper_bound_total / 8
    
    return {
        "lower_bound_days": lower_bound_days,
        "upper_bound_days": upper_bound_days,
        "lower_bound_weeks": lower_bound_weeks,
        "upper_bound_weeks": upper_bound_weeks
    }


frontend_time = calculate_time(frontend_estimates)
backend_time = calculate_time(backend_estimates)

print("Frontend Development:")
print(f"Lower Bound: {frontend_time['lower_bound_days']} days ({frontend_time['lower_bound_weeks']} weeks)")
print(f"Upper Bound: {frontend_time['upper_bound_days']} days ({frontend_time['upper_bound_weeks']} weeks)\n")

print("Backend Development:")
print(f"Lower Bound: {backend_time['lower_bound_days']} days ({backend_time['lower_bound_weeks']} weeks)")
print(f"Upper Bound: {backend_time['upper_bound_days']} days ({backend_time['upper_bound_weeks']} weeks)")
