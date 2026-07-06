# Payroll — Version 2

A Laravel 9 HR / payroll application. Server-rendered Blade UI (Bootstrap 5 + jQuery,
bundled with Vite), MySQL backend, Sanctum + Livewire available.

---

## Tech Stack

| Layer      | Technology                                    |
|------------|-----------------------------------------------|
| Framework  | Laravel 9 (PHP ^8.0.2)                         |
| Database   | MySQL                                          |
| Views      | Blade                                          |
| Front end  | Bootstrap 5, jQuery, Vite, Material Icons      |
| Auth       | Laravel Auth (web), Sanctum (API, stub)        |
| Extras     | Livewire, haruncpi/laravel-id-generator        |

---

## Getting Started

```bash
# 1. Install dependencies
composer install
npm install

# 2. Environment
cp .env.example .env
php artisan key:generate
#   → set DB_DATABASE / DB_USERNAME / DB_PASSWORD in .env

# 3. Database
php artisan migrate --seed

# 4. Run
php artisan serve      # backend  → http://localhost:8000
npm run dev            # assets (HMR)
```

Build assets for production with `npm run build`.

---

## Domain Model

```
Person ──1:1── Employee ──*:*── Designation
                  │
                  └──*:1── Department

Client ──1:*── Project
```

- **Person** — demographic data (name, birth date, gender, location).
- **Employee** — employment record linked to a Person; auto-generates an `employee_number`.
- **Department / Designation** — org structure; Employee ↔ Designation is many-to-many.
- **Client / Project** — client work tracking (activities & materials scaffolded in migrations).

### Conventions (important)
- Custom primary keys: `person_id`, `employee_id`, `user_id` (not `id`).
- No Eloquent timestamps — uses `created_by` + `date_created`.
- Manual **"voided"** soft-delete pattern (`voided`, `voided_by`, `date_voided`) — **no global scope yet**.
- `Uuid` trait auto-fills UUIDs; `customID` trait auto-generates employee numbers.

---

## Project Status & Gap Analysis

Current state: core scaffolding for employees, departments, designations, and projects is
in place. Several modules are routed/stubbed but not yet functional.

| Area                     | Status        | Gap                                                        |
|--------------------------|---------------|------------------------------------------------------------|
| Employee CRUD            | 🟡 Partial    | Create + list work; edit/delete/void missing               |
| Departments/Designations | 🟡 Partial    | List only; no create/edit                                  |
| Holidays                 | 🔴 Stub       | Route + view only, no model/migration/logic                |
| Leaves                   | 🔴 Stub       | Route + view only, no model/migration/logic                |
| **Payroll / Salaries**   | 🔴 Missing    | No salary, payslip, or pay-run models — core of the app    |
| Attendance / Time        | 🔴 Missing    | Not started                                                |
| Voiding (soft delete)    | 🔴 Missing    | Columns exist; no scope or UI to void records              |
| Auth / Roles             | 🟡 Partial    | Login works; no roles/permissions or registration flow     |
| API                      | 🔴 Stub       | Only Sanctum `/user`; no resource endpoints                |
| Tests                    | 🔴 Missing    | Only example stubs; no real coverage                       |
| `PersonObserver`         | ⚠️ Dead code  | Exists but unregistered and empty                          |

---

## Roadmap

### Phase 1 — Solidify the foundation
- [ ] Complete Employee CRUD (edit, void, restore) and validation
- [ ] Finish Department & Designation management screens
- [ ] Implement the "voided" soft-delete as a global scope + reusable trait
- [ ] Register or remove `PersonObserver`; add audit hooks (`created_by`/`voided_by`)
- [ ] Add feature tests for the employee flow

### Phase 2 — Core payroll
- [ ] Salary structure model (basic, allowances, deductions)
- [ ] Pay periods & pay runs
- [ ] Payslip generation (PDF/print) + history
- [ ] Statutory deductions (tax, pension) as configurable rules

### Phase 3 — Time & attendance
- [ ] Holidays module (calendar + logic)
- [ ] Leave types, requests, and approval workflow
- [ ] Attendance / timesheets feeding into pay runs

### Phase 4 — Access & reporting
- [ ] Roles & permissions (admin / HR / employee self-service)
- [ ] Dashboard metrics and payroll reports
- [ ] REST API (Sanctum) for resources + exports

### Phase 5 — Hardening
- [ ] CI (Pint + PHPUnit), seed/factory coverage
- [ ] Notifications (email payslips, leave approvals)
- [ ] Data export (CSV/Excel) and backups

---

## Commands

```bash
php artisan test                 # run tests
php artisan test --filter=Name   # single test
./vendor/bin/pint                # format (PSR-12)
php artisan migrate:fresh --seed # reset DB
```
