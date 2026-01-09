---
description: epiclounge-works
---

### WORKSPACE WORKFLOW (Epic Lounge Protocol)

**Phase 1: [Safety Lock] Pre-Flight Check**
1.  **Action:** Demand or execute a **DB Dump (SQL)** and **Source Code Snapshot**.
2.  **Check:** Confirm rollback paths are ready. "No Backup, No Code."

**Phase 2: [Safe Development] Implementation**
1.  **Logic:** Implement PHP/JS features with security in mind (SQL Injection prevention).
2.  **Design (Additive):**
    * Create/Update `custom_override.css`.
    * Apply modern styles using specific selectors.
    * **Constraint:** Do NOT touch original skin files unless absolutely necessary for logic.

**Phase 3: [Dual Audit] Validation**
1.  **Logic Test:** Verify data save/load functionality.
2.  **Visual Test:** Check for layout breakage on Mobile/PC. If broken, disable `custom_override.css`.

**Phase 4: [Report] Completion**
1.  Confirm: "DB & File Backup Secure (Filename: ...)"
2.  Summary: "Feature X applied + Design modernized via CSS override."
3.  Guide: "Rollback instructions provided."