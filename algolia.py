# Fabioo : estimates for frontend and backend
frontend_estimates = {
    "Integration with Algolia InstantSearch": {"lower": 20, "upper": 40},
    "Customizing Search UI/UX": {"lower": 15, "upper": 30},
    "Implementing Dynamic Filtering and Facets": {"lower": 15, "upper": 25},
    "Personalization and A/B Testing": {"lower": 10, "upper": 20},
    "Geo-Search Integration": {"lower": 15, "upper": 25}  # (if)
}

backend_estimates = {
    "Indexing Data with Algolia": {"lower": 20, "upper": 40},
    "Custom Ranking and Relevance Configuration": {"lower": 15, "upper": 30},
    "Backend API Integration": {"lower": 20, "upper": 40},
    "Analytics and Monitoring Setup": {"lower": 10, "upper": 20},
    "Optimizing Search Performance": {"lower": 20, "upper": 30}
}


def calculate_time(estimates):
    lower_bound_total = sum([estimate["lower"] for estimate in estimates.values()])
    upper_bound_total = sum([estimate["upper"] for estimate in estimates.values()])
    
    lower_bound_weeks = lower_bound_total / 24  #  20 hours/week productivity sipas oigenit- change to 22
    upper_bound_weeks = upper_bound_total / 24
    
    lower_bound_days = lower_bound_total / 4  # 3-5  hours/day sipas oigenit 
    upper_bound_days = upper_bound_total /4
    
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
